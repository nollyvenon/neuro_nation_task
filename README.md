
## How to Access

I'm implementing a REST resource using Laravel Endpoint

    GET /api/users/{userId}/history

### Steps

    Run migrations and seed test data.

    Use php artisan serve to start the Laravel server.

    Use docker-compose up to start the Docker environment.

### Tables

    Users:

        user_id (PK)

        username

        password

        status

    Sessions:

        session_id (PK)

        user_id (FK to Users)

        course_id (FK to Courses)

        timestamp (Unix timestamp)

    Scores:

        score_id (PK)

        session_id (FK to Sessions)

        user_id (FK to Users)

        score (Total points achieved in the session)

    Exercises:

        exercise_id (PK)

        course_id (FK to Courses)

        category_id (FK to DomainCategories)

        name

        points

    DomainCategories:

        category_id (PK)

        name

### Relationships

    A Session belongs to a User and a Course.

    A Score belongs to a Session and a User.

    An Exercise belongs to a Course and a DomainCategory.

### Explanation of Relationships

    Users:

        user_id is the primary key.

        Linked to Sessions via user_id.

    Sessions:

        session_id is the primary key.

        Linked to Users via user_id.

        Linked to Courses via course_id.

        Linked to Scores via session_id.

    Scores:

        score_id is the primary key.

        Linked to Sessions via session_id.

        Linked to Users via user_id.

    Courses:

        course_id is the primary key.

        Linked to Exercises via course_id.

    Exercises:

        exercise_id is the primary key.

        Linked to Courses via course_id.

        Linked to DomainCategories via category_id.

    DomainCategories:

        category_id is the primary key.

        Linked to Exercises via category_id.

### Visual Representation
```
Table Users {
  user_id int [pk]
  username varchar
  password varchar
  status varchar
}

Table Sessions {
  session_id int [pk]
  user_id int [ref: > Users.user_id]
  course_id int [ref: > Courses.course_id]
  timestamp int
}

Table Scores {
  score_id int [pk]
  session_id int [ref: > Sessions.session_id]
  user_id int [ref: > Users.user_id]
  score int
}

Table Courses {
  course_id int [pk]
  name varchar
}

Table Exercises {
  exercise_id int [pk]
  course_id int [ref: > Courses.course_id]
  category_id int [ref: > DomainCategories.category_id]
  name varchar
  points int
}

Table DomainCategories {
  category_id int [pk]
  name varchar
}
```
### Graphical Representation


Here is a Graphical Representation of the optimised DB: https://drive.google.com/file/d/1_bhknf_ndq9PPMG9zPbQcneikbvVp60J/view?usp=sharing

Users
> | user_id | username |
> |----------|----------|


Sessions
> | session_id | user_id  | course_id  | timestamp |
> |----------|----------|----------|----------|


Scores
> | score_id | session_id  | user_id  | score |
> |----------|----------|----------|----------|


Exercises
> | exercise_id | course_id  | category_id  | name | points |
> |----------|----------|----------|----------|----------|

DomainCategories
> | category_id | name |
> |----------|----------|



### Database Schema Diagram
```
+-------------------+       +-------------------+       +-------------------+
|      Users        |       |     Sessions      |       |      Scores       |
+-------------------+       +-------------------+       +-------------------+
| user_id (PK)      |<------| user_id (FK)      |<------| user_id (FK)      |
| username          |       | session_id (PK)   |       | score_id (PK)     |
| password          |       | course_id (FK)    |       | session_id (FK)   |
| status            |       | timestamp         |       | score             |
+-------------------+       +-------------------+       +-------------------+
                                  |                            |
                                  |                            |
                                  v                            |
+-------------------+       +-------------------+              |
|     Courses       |       |    Exercises      |              |
+-------------------+       +-------------------+              |
| course_id (PK)    |<------| course_id (FK)    |              |
| name              |       | exercise_id (PK)  |              |
+-------------------+       | category_id (FK)  |              |
                            | name              |              |
                            | points            |              |
                            +-------------------+              |
                                    |                         |
                                    |                         |
                                    v                         |
+-------------------+               |                         |
| DomainCategories  |               |                         |
+-------------------+               |                         |
| category_id (PK)  |<--------------+                         |
| name              |                                         |
+-------------------+                                         |

```
