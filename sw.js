self.addEventListener('install', function(e) {
 e.waitUntil(
   caches.open('anomoz').then(function(cache) {
     return cache.addAll([
       '/',
       'index.html',
       'index.php',
     ]);
   })
 );
});
self.addEventListener('fetch', function(event) {

});