## Note Manager

This is a fun, simple project that illustrates a basic note managing system.

## Technologies

The project was built using Laravel 6 and using SqlLite for the DB.

## Areas of Focus

There are several areas that could be expanded upon, as well as practices that can be implemented

### Front End Technologies

Laravel comes with several front end frameworks out of the box to use. For this project, React or Vue could be sufficient enough with the ease of components creating the cards, as well as separating concerns like the navbar.

### Input Validation

Garbage in, garbage out. Input validation is vital to any program. In this one, validation can occur on both ends of development. I would use front end validation on the input fields, to ensure that before the request is sent, the data is existential, and valid. After which on the server side, using laravel's easy validation classes would even further ensure that the data is clean before further logic is involved, such as database queries.

### Unit Testing

TDD, (Test Driven Development), could be used here too. Creating tests that cover CRUD operations could prevent bigger problems further into development. The key is to create the test before you develop the feature. Using Laravel's various testing packages, unit testing can be as robust as needed. Model factories that help generate test models with test data used by Faker, can be complex while simple to write. Another key is to write tests that cover both the negative and positive situations. If there is an 'if' in your logic, chances are you can write a test for that 'if'.

### Documention

For generating documentation, I've found that the library package, LaRecipe, which is a package that generates a good looking documentation for any app on a Laravel platform.
