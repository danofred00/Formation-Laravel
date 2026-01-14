<style>
    .carousel-item {
        height: 500px;

        &::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.3); /* Overlay color */
        }
    }
</style>