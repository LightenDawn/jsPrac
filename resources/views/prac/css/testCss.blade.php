<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        height: 100vh;
        gap: 16px;
        background-color: #f4f4f4;
    }

    .dropdown {
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    .dropdown-desc {
        font-size: 12px;
        font-weight: 400;
        color: #757575;
        font-family: 'Roboto';
    }

    .dropdown-toggle {
        text-decoration: none;
        color: #757575;
        border: 1px solid #000000;
        width: 400px;
        border-radius: 4px;
    }

    .dropdown-toggle::after {
        display:none !important;
    }

    .dropdown-toggle:hover,
    .dropdown-toggle:active,
    .dropdown-toggle:focus {
        text-decoration: none;
        color: #757575;
    }

    .dropdown-toggle:focus {
        background-color: #cccccc;
        color: #000000;
    }

    .dropdown-toggle .dropdown-img {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 16px;
        width: 16px;
    }

    .dropdown-toggle .dropdown-img img {
        width: 12px;
        height: 12px;
    }

    .dropdown-toggle .dropdown-img .arrow {
        transform: rotate(270deg);
    }

    .dropdown-toggle.show .dropdown-img .arrow {
        transform: rotate(90deg);
    }

    .dropdown-toggle.show + .dropdown-helper-text {
        /* display: none; */
        visibility: hidden;
    }

    .dropdown-translate-div {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        padding: 12px 24px;
    }

    .dropdown-helper-text {
        font-size: 12px;
        font-family: 'Roboto';
        font-weight: 400;
    }

    .dropdown-toggle.show ~ .dropdown-menu.show {
        transform: translate(0px, 84px) !important;
    }

    .dropdown-menu {
        width: 400px;
    }

    .dropdown-item {
        padding: 1rem 1rem;
    }

    .dropdown-item:active,
    .dropdown-item:focus {
        background-color: #cccccc;
    }

    .dropdown-item a:active,
    .dropdown-item a:focus {
        color: #000000;
    }

    .dropdown-item a {
        display: block;
        text-decoration: none;
        color: #757575;
        width: 100%;
    }

    .error-msg {
        display: none;
    }

    .error-msg p {
        color: #ff4217;
        margin: 0 !important;
    }

    .btn {
        border: 1px solid #000000 !important;
        padding: 0.25rem 2rem !important;
    }

    .btn:hover,
    .btn:active {
        background-color: #ffc743;
        color: #ffffff;
        border-color: #ffe100;
    }
</style>
