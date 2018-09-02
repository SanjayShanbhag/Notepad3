(function(){
    'use strict';
    
    var CACHE_NAME = 'version2';
    var urlsToCache = [
        '.',
        'index.php',
        'login.php',
        'addnote.php',
        'note.php',
        'pnotes.php',
        'about.php',
        'error.php',
        'CSS/w3.css',
        'CSS/style.css',
        'images/tl.jpg',
        'images/back.jpg',
        'images/loader.gif',
        'images/logo.png',
        'images/user.jpg',
        'images/complete.png',
        'images/error.png',
        'images/developer.jpg',
        'images/signup.png',
        'images/features.jpg',
        'manifest.json',
        'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',
        'https://code.jquery.com/jquery-2.1.1.min.js',
        'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js',
        'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'
    ];
  
    self.addEventListener('install', function(event) {
      
        event.waitUntil(
            caches.open(CACHE_NAME)
            .then(function(cache) {
                return cache.addAll(urlsToCache);
            })
        );
        
    });

    self.addEventListener('activate', function(event) {

        var cacheWhitelist = [CACHE_NAME];
        event.waitUntil(
            caches.keys().then(function(cacheNames) {
                return Promise.all(
                    cacheNames.map(function(cacheName) {
                        if (cacheWhitelist.indexOf(cacheName) === -1) {
                            return caches.delete(cacheName);
                        }
                    })
                );
            })
        );
        var db;
        var request = indexedDB.open("Notepad3", 1);
         
        request.onerror = function(event) {
            console.log("error: ");
        };
         
        request.onsuccess = function(event) {
            db = request.result;
            console.log("success: "+ db);
        };
         
         request.onupgradeneeded = function(event) {
            var db = event.target.result;
            var objectStore = db.createObjectStore("notesOffline", {keyPath: 'primaryid', autoIncrement:true});
            var objectStore = db.createObjectStore("notesOfflineEdits", {keyPath: 'primaryid', autoIncrement:true});
            var objectStore = db.createObjectStore("notes", {keyPath: 'noteid'});
            var objectStore = db.createObjectStore("publicNotesOffline", {keyPath: 'noteid'});
        }
    });
    
    self.addEventListener('fetch', function(event) {
        event.respondWith(
            caches.match(event.request, {'ignoreSearch': true})
            .then(function(response) {
                return response || fetchAndCache(event.request);
            })
        );
    });

    function fetchAndCache(url){
        return fetch(url)
        .then(function(response) {
            return caches.open(CACHE_NAME)
            .then(function(cache) {
                //cache.put(url, response.clone());
                return response;
            });
        })
        .catch(function(error) {
            console.log('Request Failed:', error);
            // You could return a custom offline 404 page here
            return caches.match("error.php");
        });
    }
    
})();