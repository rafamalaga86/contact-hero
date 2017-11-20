
Well, here is the solution.

# To run it

Given you have a symbolic link  of phalcon dev tools in the root of the application directory, you should run:

```$ ./phalcon migration run```

to run the migrations and load fixture data into the sqlite database. Then execute:

```$ ./phalcon serve --hostname localhost```

The application will be then running in localhost:8000

### Comments

I made "resource creation" and "resource update" in a traditional way, but did the "resource deletion" with ajax to show both ways.

The application is fully functional and gives what I was asked. However, is not meant to be in production yet:
- It has not been tested in a real production server with production settings.
- CSRF protection for the ajax delete endpoint (the others POST routes are CSRF protected) still needs to be done, but it would be really similar as the implementation for the POST routes, where is already working correctly.
- Show the creation date in a more human way.
- The error log messages should improve to tell more information...
- Etc...

Also, in the forms, the email input is of type "text" so you can check email validation in the backend, but normally it would be of course type "email".

The web is also responsive design, so it works fine in mobile. 


### Further work

In the mail it said that feel free to implement anything else. I would love to implement something more advance in the level with my experience, but I would appreciate you tell me in advance if you are interested in me seeing anything specific, because as you know I do have a job at the moment, and I don't have much free time. So, if you need further proof of my good PHP programming skills and best coding standards, I can set up codeception and stablish an example of QA process and make some example tests, or I could set up a production server with a deployment process... I am open to ideas. If you don't need that, it's also fine, I also would appreciate that as I have not had any free time in a while.

Best regards,

Rafael.