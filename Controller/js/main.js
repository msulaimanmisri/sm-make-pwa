if ("serviceWorker" in navigator) {
  navigator.serviceWorker
    .register("/wp-content/plugins/sm-make-pwa/js/service-worker.js")
    .then(function (registration) {
      console.log("Service Worker registered with scope:", registration.scope);
    })
    .catch(function (error) {
      console.error("Service Worker registration failed:", error);
    });
}
