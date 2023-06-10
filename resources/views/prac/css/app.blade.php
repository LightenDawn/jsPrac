<style>
    * {
        box-sizing: border-box;
    }

    body {
        font-family: 'Roboto', open-sans;
        margin: 0;
    }

    h1,
    h2 {
        margin: 0 0 1rem 0;
        font-family: 'Roboto Condensed', 'Roboto', open-sans;
    }

    h2 {
        font-size: 1.5rem;
    }

    a {
        color: #ff0055;
        text-decoration: none;
    }

    a:active,
    a:hover {
        text-decoration: underline;
    }

    button {
        padding: 1rem;
        color: #ff0055;
        font: inherit;
        border: none;
        cursor: pointer;
        background: transparent;
    }

    button:hover,
    button:active {
        background: #ffc6d9;
    }

    button:focus {
        outline: none;
    }

    main {
        padding: 2rem;
        display: flex;
        flex-direction: column;
        max-width: 100rem;
        margin: auto;
        align-items: flex-start;
    }

    section {
        margin: 0 0 2rem 0;
        padding: 2rem;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.26);
        background: white;
        border-radius: 10px;
    }

    .modal {
        position: fixed;
        top: 30vh;
        left: 5%;
        width: 90%;
        z-index: 100;
        background: white;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.26);
        animation: float-in 0.3s ease-out forwards;
        display: flex;
        flex-direction: column;
    }

    .modal h2 {
        padding: 1rem;
        border-bottom: 1px solid #ccc;
    }

    .modal p {
        margin: 0;
        padding: 0 1rem;
    }

    .modal button {
        align-self: flex-end;
        margin: 0.5rem;
    }

    #backdrop {
        position: fixed;
        z-index: 10;
        width: 100%;
        height: 100vh;
        left: 0;
        top: 0;
        background: rgba(0, 0, 0, 0.75);
        display: none;
        pointer-events: none;
    }

    #backdrop.visible {
        display: block;
        pointer-events: all;
    }

    #main-header {
        padding: 2rem 2rem;
        background: #ff0055;
        color: white;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.26);
    }

    #main-header h1 {
        font-size: 2.5rem;
        text-align: center;
        margin-bottom: 0;
    }

    #instructor-info {
        display: flex;
        align-items: center;
        border-bottom: 2px solid #ff0055;
        padding-bottom: 1rem;
    }

    #instructor-info img {
        width: 5rem;
        height: 5rem;
        border-radius: 50%;
        object-fit: cover;
        border: 1px solid #ccc;
    }

    #instructor-info ul {
        list-style: none;
        margin: 0 0 0 1rem;
        padding: 0;
    }

    @media(min-width: 768px) {
        main {
            flex-direction: row;
        }

        section {
            flex: 1;
            margin: 0 2rem;
        }

        .modal {
            left: calc(50% -20rem);
            width: 40rem;
        }
    }

    @keyframes float-in {
        from {
            transform: translateY(-3rem);
        }

        to {
            transform: translateY(0);
        }
    }
</style>
