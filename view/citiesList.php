 <section>
<?php
    if (!empty($cities)) {
        echo "<h2>" . count($cities) . " Results</h2>";
        foreach ($cities as $result) {
            echo "<p>{$result['Name']} - Pop: {$result['Population']}</p>";
        }
    } else if ($name) {
        echo "<p>No Results.</p>";
    }
?>
</section>
