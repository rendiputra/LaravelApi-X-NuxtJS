API Endpoint

+-----------+------------------+---------------+-------------------------------------------------+------------+
| Method    | URI              | Name          | Action                                          | Middleware |
+-----------+------------------+---------------+-------------------------------------------------+------------+
| GET|HEAD  | /                |               | Closure                                         | web        |
| GET|HEAD  | api/posts        | posts.index   | App\Http\Controllers\Api\PostController@index   | api        |
| POST      | api/posts        | posts.store   | App\Http\Controllers\Api\PostController@store   | api        |
| GET|HEAD  | api/posts/{post} | posts.show    | App\Http\Controllers\Api\PostController@show    | api        |
| PUT|PATCH | api/posts/{post} | posts.update  | App\Http\Controllers\Api\PostController@update  | api        |
| DELETE    | api/posts/{post} | posts.destroy | App\Http\Controllers\Api\PostController@destroy | api        |
| GET|HEAD  | api/user         |               | Closure                                         | api        |
|           |                  |               |                                                 | auth:api   |
+-----------+------------------+---------------+-------------------------------------------------+------------+
