<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;
use CodeIgniter\HTTP\ResponseInterface;

class Admin extends BaseController
{
    /**
     * @return \CodeIgniter\HTTP\ResponseInterface|string|null Returns 403 error view if access denied, null if granted
     */
    private function checkAdminAccess()
    {
        // Get the session service - this manages user login state
        $session = session();

        // User not authenticated - show 403 Forbidden error
        if (!$session->has('user')) {
            return $this->show403Error('Authentication required. Please log in to access admin pages.');
        }

        $user = $session->get('user');

        // User authenticated but not a manager - show 403 Forbidden error
        if (!isset($user['type']) || $user['type'] !== 'admin') {
            return $this->show403Error('Access denied: Admin role required to access admin pages.');
        }

        // Access granted - return null to continue execution
        return null;
    }

    /**
     * Show 403 Forbidden Error Page
     *
     * Displays a custom 403 error page for unauthorized access attempts.
     * This provides better UX than redirecting to login for authenticated users.
     *
     * @param string $message The error message to display
     * @return string The rendered 403 error view
     */
    private function show403Error(string $message = 'Access Forbidden'): string
    {
        // Set HTTP status code to 403
        $this->response->setStatusCode(403);

        // Render the 403 error view with custom message
        return view('errors/html/error_403', ['message' => $message]);
    }

    /**
     * Display Admin Dashboard
     *
     * GET /admin/dashboard
     * Shows the administrative dashboard with system statistics and management tools.
     * Requires admin authentication.
     */
    public function showDashboard()
    {
        // Enforce admin-only access using role-based authorization
        $accessCheck = $this->checkAdminAccess();
        if ($accessCheck !== null) {
            return $accessCheck; // Return 403 error view if access denied
        }

        try {
            $usersModel = new UsersModel();

            // Count active client accounts (status = 1)
            $activeClientsCount = $usersModel->where('type', 'client')->where('account_status', 1)->countAllResults();
        } catch (\Exception $error) {
            // Handle database errors gracefully
            $activeClientsCount = "Server Issue: " . $error;
        }

        // Render admin dashboard with statistics
        return view('admin/adminDashboard');
    }
}
