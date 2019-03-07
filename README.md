### Notes

Bunch of different ways to accomplish the server side work here but there are two main points:

1. We are checking isset() on every form input. (I'm also using empty() but according to 
the prof.this isn't necessary. I couldn't get it working without it, though). 
2. If that passes we will want to validate and sanitize by passing different arguments to filter_var()

http://php.net/manual/en/function.filter-var.php

