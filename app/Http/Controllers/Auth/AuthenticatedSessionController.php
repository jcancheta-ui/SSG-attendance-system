public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        $user = auth()->user();

        // Redirect based on role_id
        if ($user->role_id === 1) {
            return redirect()->intended(route('dashboard')); // Admin Dashboard (or admin route)
        } elseif ($user->role_id === 2) {
            return redirect()->intended(route('dashboard')); // Officer Dashboard
        } elseif ($user->role_id === 3) {
            return redirect()->intended(route('dashboard')); // Adviser Dashboard
        }

        return redirect()->intended(route('dashboard')); // Student Dashboard
    }