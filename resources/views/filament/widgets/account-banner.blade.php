<div class="fi-wi-account-banner" style="grid-column: 1 / -1;">
    <div style="background: linear-gradient(to right, rgb(147, 51, 234), rgb(37, 99, 235)); border-radius: 0.75rem; padding: 1.5rem; color: white; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);">
        <div style="display: flex; align-items: center; justify-content: space-between;">
            <div>
                <h2 style="font-size: 1.5rem; font-weight: bold; margin-bottom: 0.25rem; color: white;">Welcome back, {{ auth()->user()->name }}!</h2>
                <p style="color: rgba(243, 232, 255, 1);">Manage your OBCT content here</p>
            </div>
            <div style="text-align: right;">
                <p style="font-size: 0.875rem; color: rgba(243, 232, 255, 1);">{{ now()->format('l, F j, Y') }}</p>
            </div>
        </div>
    </div>
</div>
