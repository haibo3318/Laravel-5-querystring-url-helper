# Laravel-5-querystring-url-helper
For those who want a querystring url instead of Laravel's default url()

Sometimes we need a url with traditional querystrings. For example, in a common Search function:

Laravel's router:
www.example.com/search/product/date/1

what we want:
www.example.com/search?by=product&page=1&sortby=date 

Or www.example.com/search?by=product&sortby=date&page=1

They should direct to the same page because we don't care about the order of these searching parameters and may add some searching parameter in any order later(which default Laravel router can not do).

1.Create a file app/Helpers/helper.php

2.In your controller function, add:
<pre><code>use App\Helpers\Helper;</code></pre>
and then call your custom url helper:
<pre><code>Helper::url_querystring();</code></pre>
