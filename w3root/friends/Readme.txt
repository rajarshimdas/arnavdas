Create friends.db using the following command
$ sqlite3 friends.db

The sqlite database file friends.db and the folder containg this file should be writable by nginx (www-data)

$ cd arnavdas.in
$ sudo chown -R arnav:www-data friends
$ sudo chmod -R 775 friends
