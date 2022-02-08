<section>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="GET">
        <h2 id="enter-a-city">Enter a City:</h2>
        <input type="text" id="city" name="name" aria-labelledby="enter-a-city" required>
        <button>Submit</button>
    </form>
</section>