<div class="container">
    <div class="row">
        <div class="col">
            <h1>Result</h1>
            <hr />
            <br />
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Code postal</th>
                        <th scope="col">Ville</th>
                        <th scope="col">Latitude</th>
                        <th scope="col">Longitude</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($_SESSION['data']['features'] as $data) {
                        echo '<tr>';
                        echo '<td>' . $data['properties']['name'] . '</td>';
                        echo '<td>' . $data['properties']['citycode'] . '</td>';
                        echo '<td>' . $data['properties']['city'] . '</td>';
                        echo '<td>' . $data['properties']['x'] . '</td>';
                        echo '<td>' . $data['properties']['y'] . '</td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>