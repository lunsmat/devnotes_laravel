# Dev_Notes (PHP)

If you have see the devnotes, this is a similar project but now this project was maden with the PHP framework laravel.

## What's Project Needs to do?

- List the notes
- Get informations of a only note
- Insert a new note
- Update a note
- Delete a note

### Frontend

The frontend of the app was not maden yet, so can not be accessed.

### Backend (API)

Here is the endpoints of the app and his uses.

- `base_url/api/ping` (GET): This endpoint is a test endpoint to verify if API works, if return ping equals true, API is working.
- `base_url/api/notes` (GET): This route get the title and the id of all notes that exists in database and return to client.
- `base_url/api/notes/{id}` (GET): This route get a only note that exists in database and return to client if note exists, else is returned a error message.
- `base_url/api/notes` (POST): 
- `base_url/api/notes/{id}` (PUT)
- `base_url/api/notes/{id}` (DELETE)
