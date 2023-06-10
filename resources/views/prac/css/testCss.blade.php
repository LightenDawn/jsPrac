<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .dropdown {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 126px;
        height: 32px;
        background-color: #ebeaea;
        border: 1px solid #000000;
        border-radius: 4px;
    }

    .dropdown:hover {
        background-color: #d1d0d0;
    }

    .dropdown-toggle::after {
        display: none;
    }

    .dropdown-toggle {
        display: flex;
        flex-direction: row;
        align-items: center;
        gap: 6px;
    }

    .dropdown-toggle {
        text-decoration: none;
        color: #757575;
    }

    .dropdown-toggle:hover,
    .dropdown-toggle:active,
    .dropdown-toggle:focus {
        text-decoration: none;
        color: #757575;
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
        transform: rotate(90deg);
    }

    .dropdown-toggle.show .dropdown-img .arrow {
        transform: rotate(270deg);
    }

    .dropdown-toggle .dropdown-translate-div {
        display: flex;
        flex-direction: row;
        align-items: center;
        gap: 4px;
    }
</style>
