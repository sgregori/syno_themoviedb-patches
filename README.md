# syno_themoviedb-patches

Some patches for Synology VideoStation - TheMovieDB plugin

The original plugin has problems with movies that have same name, per example "Flashback" or "Swan Song".

The VideoStation app sends all file name to the search api, and doesnt uses TheMovieDB_ID for searching movies.

With this simple patch, you can add the TheMovieDB_ID to the file name, per example "Flashback 809065" and the plugin gets the correct movie information.

I didnt add the complete plugin because i dont know anything about the license.
