# Movie Studio Database Project

## Overview
This project manages a **Movie Database** with details about **Movies** and their respective **Studios**. It consists of two relational tables:  

- **Movies** – Contains details of the movies. 
- **Studios** – Stores information about film production studios.

On the webpage, movies are displayed along with their associated studio details.

## Database Schema

### **Movies Table**
| Column         | Data Type  | Description |
|---------------|-----------|-------------|
| `movie_id`    | INT (PK)  | Unique ID for each movie |
| `title`       | VARCHAR   | Movie title (Unique) |
| `original_language` | VARCHAR | Language of the movie |
| `release_date` | DATE     | Movie release date |
| `budget`      | INT       | Production budget |
| `revenue`     | INT       | Total revenue earned |
| `rating`      | FLOAT     | Average rating |
| `studio_id`   | INT (FK)  | References `studio_id` in the Studios table |

### **Studios Table**
| Column         | Data Type  | Description |
|---------------|-----------|-------------|
| `studio_id`   | INT (PK)  | Unique ID for each studio |
| `studio_name` | VARCHAR   | Name of the studio |
| `studio_country` | VARCHAR | Country where the studio is based |
| `studio_year` | INT       | Year the studio was founded |

## Data Source:
The dataset is taken from **Kaggle**.

## Deployment URL
**Access the project here:** [Movie Studio Database](http://phpassignment.infinityfreeapp.com/?i=1)


