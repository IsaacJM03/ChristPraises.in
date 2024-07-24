<?php
$redirect_home = false;

if ($wo['loggedin'] == true) {
    $redirect_home = true;
    if (isset($_GET['type']) && $_GET['type'] == 'add_account') {
        $redirect_home = false;
    }
}

if($redirect_home) {
    header("Location: " . $wo['config']['site_url']);
    exit();
}
$wo['description'] = $wo['config']['siteDesc'];
$wo['keywords']    = $wo['config']['siteKeywords'];
$wo['page']        = 'welcome';
$wo['title']       = $wo['config']['siteTitle'];
$wo['content']     = Wo_LoadPage('welcome/content');
?>
<html>
<head>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta name="apple-mobile-web-app-title" content="Christ Praises">
<meta name="application-name" content="Christ Praises">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
<link rel="manifest" href="manifest.json">
<link rel="apple-touch-icon" sizes="180x180" href="./icon.jpg">
<link rel="icon" type="image/png" sizes="32x32" href="../icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../icons/favicon-16x16.png">
<link rel="apple-touch-startup-image" sizes="512x512" href="./icon.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<link rel="mask-icon" href="icons/safari-pinned-tab.svg" color="#8784bb">
<!-- Splash Screens Code -->
<script src="https://unpkg.com/ios-pwa-splash@1.0.0/cdn.min.js"></script>
    <script>
            window.addEventListener('load', function() {
                iosPWASplash('../splash_screens/icon.png', '#ffffff');
            });
    </script>
</head>
<body>
<script>
if ('serviceWorker' in navigator) {
    async function refreshServiceWorker() {
        // Unregister all service workers
        const registrations = await navigator.serviceWorker.getRegistrations();
        for (let registration of registrations) {
            await registration.unregister();
        }

        // Clear all caches
        const cacheNames = await caches.keys();
        for (let cacheName of cacheNames) {
            await caches.delete(cacheName);
        }

        // Register the new service worker
        try {
            const registration = await navigator.serviceWorker.register('service-worker.js');
            // console.log('Service Worker re-registered with scope:', registration.scope);

            // Immediately check for updates and activate the new worker if available
            if (registration.waiting) {
                registration.waiting.postMessage({ type: 'SKIP_WAITING' });
            }

            // Ensure the new service worker is controlling the page as soon as possible
            navigator.serviceWorker.addEventListener('controllerchange', () => {
                window.location.reload();
            });

        } catch (error) {
            console.error('Service Worker registration failed:', error);
        }
    }

    // Call the async function to refresh the service worker
    refreshServiceWorker().then(() => {
        console.log('Service Worker and cache refresh complete.');
    });

    // Check for updates on page load
    window.addEventListener('load', async () => {
        const registration = await navigator.serviceWorker.ready;
        if (registration.waiting) {
            registration.waiting.postMessage({ type: 'SKIP_WAITING' });
        } else if (registration.active) {
            registration.update();
        }
    });
} else {
    console.log('Service Worker not supported in this browser.');
}

</script>
</body>
</html>