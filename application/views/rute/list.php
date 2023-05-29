<div class="section-body">
    <div class="card">
        <div class="card-header">
            <h4>Sistem Informasi Geografis</h4>
        </div>
        <div class="card-body">
            <div id="map"></div>

            <div class="mt-5">
                <h4 class="text-center mb-4">Penghitungan Jarak Menggunakan Haversine Formula</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th width="10px">#</th>
                            <th>Nama Sekolah</th>
                            <th>Lintang</th>
                            <th>Bujur</th>
                            <th>Jarak</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($this->input->get('latitude') && $this->input->get('longitude')) {
                            $data = $this->db->select('*, 
                                (6371 * acos( cos( radians(' . $this->input->get("latitude") . ') )  
                                * cos( radians( lintang ) ) 
                                * cos( radians( bujur ) - radians(' . $this->input->get("longitude") . ') ) + sin( radians(' . $this->input->get("latitude") . ') ) 
                                * sin(radians(lintang)) ) ) AS distance')->where('status', 1)->order_by('distance', 'ASC')
                                // ->limit(3)
                                ->get('sekolah')
                                ->result();

                            foreach ($data as $key => $value) : ?>
                                <tr>
                                    <td><?= $key + 1; ?></td>
                                    <td><?= $value->nama; ?></td>
                                    <td><?= $value->lintang; ?></td>
                                    <td><?= $value->bujur; ?></td>
                                    <td>
                                        <?= getDistanceBetweenPointsNew(
                                            $this->input->get('latitude'),
                                            $this->input->get('longitude'),
                                            $value->lintang,
                                            $value->bujur,
                                            'kilometers'
                                        ); ?> Km
                                    </td>
                                </tr>
                        <?php
                            endforeach;
                        } else {
                            echo '<tr><td colspan="5" class="text-center">Data Lintang dan Bujur yang anda inputkan tidak valid!</td></tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
function getDistanceBetweenPointsNew($latitude1, $longitude1, $latitude2, $longitude2, $unit = 'kilometers')
{
    $theta = $longitude1 - $longitude2;
    $distance = (sin(deg2rad($latitude1)) * sin(deg2rad($latitude2))) + (cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * cos(deg2rad($theta)));
    $distance = acos($distance);
    $distance = rad2deg($distance);
    $distance = $distance * 60 * 1.1515;
    switch ($unit) {
        case 'miles':
            break;
        case 'kilometers':
            $distance = $distance * 1.609344;
    }
    return (round($distance, 2));
}

if (!$this->input->get('latitude') && !$this->input->get('longitude')) {
    echo "<script>
    swal('Maaf!', 'Data Lintang dan Bujur yang anda inputkan tidak valid!', 'error'); // pesan berhasil
        </script>";
}
?>

<style>
    /* Set the size of the div element that contains the map */
    #map {
        height: 400px;
        width: 100%;
    }
</style>

<script>
    // Initialize and add the map
    var map;

    function initMap() {
        // The map, centered on Central Park
        const center = {
            lat: -8.2169235,
            lng: 114.3311312
        };
        const options = {
            zoom: 10,
            scaleControl: true,
            center: center
        };
        map = new google.maps.Map(document.getElementById('map'), options);

        // Locations of landmarks
        <?php foreach ($sekolah->result() as $row) : ?>
            new google.maps.Marker({
                // animation: google.maps.Animation.BOUNCE,
                position: {
                    lat: <?= $row->lintang; ?>,
                    lng: <?= $row->bujur; ?>
                },
                map: map,
            });
        <?php endforeach; ?>

        if (<?= $this->input->get('latitude') ? 1 : 'null' ?>) {
            new google.maps.Marker({
                animation: google.maps.Animation.BOUNCE,
                position: {
                    lat: <?= $this->input->get('latitude') ? $this->input->get('latitude') : 0 ?>,
                    lng: <?= $this->input->get('longitude') ? $this->input->get('longitude') : 0 ?>
                },
                map: map,
                icon: {
                    path: "M20,13.8c0,5.5-4.4,9.3-10,14.2C4.4,23.1,0,19.3,0,13.8C0,8.4,4.5,4,10,4S20,8.4,20,13.8z",
                    fillColor: '#1193c5',
                    fillOpacity: 1,
                    strokeWeight: 1,
                    strokeColor: 'black',
                    anchor: new google.maps.Point(10, 27)
                },
            });
        }
    }
</script>
<!--Load the API from the specified URL -- remember to replace YOUR_API_KEY-->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap">
</script>