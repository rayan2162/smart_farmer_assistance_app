Here’s an updated version of your README file incorporating your initial draft and the required link for setup & installation:

---

# Smart Farmer Assistant App

The **Smart Farmer Assistant App** is a web application designed to help farmers and administrators manage farming activities. It offers features related to crops, agroforestry, livestock, silos, and equipment. There are two types of users in the system: regular users (farmers) and admins.

- **Users** can register and wait for admin approval before accessing the app’s features.
- **Admins** can approve users, manage user accounts, and post notices.

This application is built using **Laravel 10**, **Bootstrap 4**, **HTML/CSS**, and **Laravel/UI v4.x**.

## Features

### User Side

- **Register & Login**: Users can register, but they must wait for admin approval to access their account. Once approved, users can log in and access the dashboard.
- **Dashboard**: After logging in, users can access the following features:
  - **Notices**: View notices posted by the admin.
  - **Crops**: Manage and monitor various crops.
  - **Agroforestry**: Information and management tools for agroforestry.
  - **Livestock**: Keep track of livestock management.
  - **Silos**: Manage grain storage and silo usage.
  - **Equipment**: Monitor and manage farming equipment.
  - **Weather**: Get real-time weather updates related to farming.

### Admin Side

- **User Approval**: Approve or reject registered users.
- **Manage Users**: View and manage all users in the system.
- **Post Notices**: Publish important notices for farmers.

### Other Features

- **Landing Page**: Located at `127.0.0.1:8000/`, this page contains an email option that sends emails using an SMTP server configured with **Mailtrap.io**.

## Technology Stack

- **Backend**: Laravel 10
- **Frontend**: Bootstrap 4, HTML, CSS
- **UI Components**: Laravel/UI v4.x
- **Email**: SMTP server using Mailtrap.io

## Setup & Installation

For detailed **instructions** on setting up and installing the Laravel code for the Smart Farmer Assistant App, please go to the [Instruction Guide](https://github.com/rayan2162/smart_farmer_assistance_app/blob/main/README.md).

## Usage

- Visit the landing page at `127.0.0.1:8000/`.
- Users can register and will be notified via email once the admin approves their account.
- First, Admin has to manually modify the default value from `0` to `1` in the `is_admin` field of the `users` table in the database after registration.

## License

This project is open-source and available under the [MIT License](LICENSE).

---

This version includes the correct link for the setup & installation guide and highlights the steps needed for manual admin assignment.