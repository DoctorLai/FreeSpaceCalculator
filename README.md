# Free Space Path Loss Calculator
- Free Space Path Loss Calculator
- https://utopian.io/utopian-io/@justyy/free-space-path-loss-calculator-with-api

# Online Calculator
The Free Space Calculator has been live on:  https://propagationtools.com/wireless/free-space-path-loss-calculator-with-api/

# API
You can invoke the API at the following end-point:

> https://propagationtools.com/api/freespace/?mhz=947&meter=234&gt=15&gr=10

and, the returned format is JSON:

> {"err":[],"db":54.361316728268}

And, you could pass the parameters via the POST method:

> ? curl -s -X POST "https://propagationtools.com/api/freespace/" -d "mhz=947" -d "meter=234"
{"err":[],"db":79.361316728268}

# Author
[@justyy](https://steemit.com/@justyy)
