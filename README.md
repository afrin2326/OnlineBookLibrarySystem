# Admin Registration System

A simple and responsive admin registration system built with HTML, CSS, JavaScript, and PHP. It includes client-side and server-side validation, file upload functionality, and a clean, modern UI.

## Features

* **Admin Registration Form** - Collects full name, admin ID, email, password, date of birth, gender, and religion.
* **Client-Side Validation** - JavaScript validation for all input fields with real-time error messages.
* **Server-Side Validation** - PHP validation to ensure data integrity and security.
* **File Upload** - Supports profile picture uploads (JPG, JPEG, PNG, GIF) with a 5MB size limit.
* **Success Page** - Displays a confirmation message upon successful registration.
* **Responsive Design** - Works seamlessly on desktop and mobile devices.
* **Clean UI** - Gradient backgrounds, card-based layout, and hover effects.

## Project Structure

```text
├── registrationAdmin.html      # Admin registration form
├── registrationStyle.css       # Styles for the registration form
├── validation.js               # Client-side form validation
├── processRegistration.php     # Server-side validation & redirect
├── adminNext.php               # Success page with welcome image
├── adminNext.css               # Styles for success/upload pages
├── adminNext.html              # Static success page (alternative)
├── upload.php                  # File upload handler
└── uploads/                    # Directory for uploaded files (auto-created)
```

## Getting Started

### Prerequisites

* A web server with PHP support (e.g., XAMPP, WAMP, MAMP, or a live server).
* A modern web browser.

### Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/admin-registration.git
   ```
2. Move the project to your web server's root directory:
   * For XAMPP: `C:\xampp\htdocs\admin-registration`
   * For WAMP: `C:\wamp\www\admin-registration`
   * For MAMP: `/Applications/MAMP/htdocs/admin-registration`
3. Start your local server (Apache + PHP).
4. Open the registration form in your browser:
   `http://localhost/admin-registration/registrationAdmin.html`

## Usage

1. Fill out the registration form with the required details:
   * Full Name
   * Admin ID
   * Email
   * Password (minimum 6 characters)
   * Date of Birth
   * Gender (select one)
   * Religion (select at least one)
2. (Optional) Upload a profile picture using the file upload section above the form.
3. Click "Register" - The form will validate your inputs on both the client and server sides.
4. On success, you'll be redirected to the success page (`adminNext.php`).
5. On failure, error messages will be displayed, and you can correct your inputs.

## Validation Rules

| Field         | Rule                                  |
|---------------|---------------------------------------|
| Full Name     | Required                              |
| Admin ID      | Required                              |
| Email         | Must be a valid email format          |
| Password      | Minimum 6 characters                  |
| Date of Birth | Required                              |
| Gender        | One option must be selected           |
| Religion      | At least one option must be selected  |
| File Upload   | JPG, JPEG, PNG, GIF - Max 5MB         |

## Technologies Used

* **HTML5**      - Structure
* **CSS3**       - Styling and responsive design
* **JavaScript** - Client-side validation
* **PHP**        - Server-side validation and file handling

## Screenshots

> Add screenshots of your registration form and success page here.

## Contributing

Contributions are welcome! Feel free to fork this repository and submit a pull request.

1. Fork the project.
2. Create your feature branch (`git checkout -b feature/AmazingFeature`).
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`).
4. Push to the branch (`git push origin feature/AmazingFeature`).
5. Open a pull request.
