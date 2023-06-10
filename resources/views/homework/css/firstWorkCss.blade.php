<style>
    html {
        font-family: sans-serif;
    }

    body {
        margin: 5rem;
        color: #521751;
    }

    h1 {
        background: #fa923f;
        color: white;
        padding: 1rem;
    }

    ol {
        counter-reset: list-counter;
        list-style: none;
        margin: 0;
        padding: 1rem;
        border: 1px solid #fa923f;
    }

    li {
        counter-increment: list-counter;
        padding: 1rem;
        margin: 1rem 1rem 1rem 3.5rem;
        border: 1px solid #521751;
        position: relative;
    }

    li:before {
        content: counter(list-counter);
        margin-right: 0.5rem;
        padding: 1rem;
        background: #521751;
        color: white;
        position: absolute;
        left: -2.75rem;
        top: -1px;
        border: 1px solid #521751;
    }

    li:hover,
    li:active {
        border-color: #fa923f;
        color: white;
        background: #fa923f;
    }

    button {
        width: 4rem;
        height: 1.5rem;
        background-color: #f8b176;
        border: 1px solid #fa923f;
        margin: 0.5rem auto 0;
        color: white;
    }

    .function {
        display: flex;
        flex-direction: row;
        gap: 0.25rem;
    }

    button:hover {
        background-color: #fa923f;
        border-color: #f8b176;
    }

    section {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin-top: 20px;
        width: 100%;
        height: 20rem;
        border: 1px solid #fa923f;
    }

    section .input-section {
        display: flex;
        flex-direction: column;
    }

    section .input-section>label {
        font-size: 1.25rem;
        font-weight: 700;
        margin: 0 auto;
    }

    section .input-section>input {
        height: 1.5rem;
        margin-top: 0.5rem;
        padding: 0 0.5rem;
        border-radius: 4px;
    }

    section .input-section>input:focus {
        background-color: rgb(230, 230, 230);
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .display-result {
        width: 25%;
        height: 3rem;
        margin: 1rem auto 0 auto;
        background-color: rgb(198, 10, 254);
    }

    .display-result>p {
        color: white;
        font-weight: bolder;
        margin: 0;
        text-align: center;
        line-height: 3rem;
    }
</style>
