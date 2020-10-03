<div class="container mt-5">
    <div class="cuaca">
        <div class="row">
            <div class="col">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
                    Tambah data
                </button>
                <h3>Prakiraan Cuaca</h3>
                <hr>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Kota</th>
                            <th scope="col">Hari</th>
                            <th scope="col">Waktu</th>
                            <th scope="col">kecerahan</th>
                            <th scope="col">Humidity</th>
                            <th scope="col">Kecepatan Angin</th>
                            <th scope="col">Suhu</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['wtr'] as $wtr) : ?>
                            <tr>
                                <th scope="row"><?= $wtr['id']; ?></th>
                                <td><?= $wtr['kota']; ?></td>
                                <td><?= $wtr['hari']; ?></td>
                                <td>Pukul <?= $wtr['waktu']; ?></td>
                                <td><?= $wtr['kecerahan']; ?></td>
                                <td><?= $wtr['humidity']; ?></td>
                                <td><?= $wtr['kecepatan_angin']; ?></td>
                                <td><?= $wtr['suhu']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambah Data Cuaca</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="<?= BASEURL; ?>/cuaca/tambah" method="post">
                    <div class="form-group">
                        <label for="kota">Kota</label>
                        <input type="text" class="form-control" id="kota" name="kota">
                    </div>

                    <div class="form-group">
                        <label for="hari">Hari</label><br>
                        <input type="text" class="datepicker" id="hari" name="hari">
                        <script type="text/javascript">
                            $('.datepicker').datepicker();
                        </script>
                    </div>

                    <div class="form-group">
                        <label>waktu</label><br>
                        <input type="text" class="timepicker" id="waktu" name="waktu">
                        <script type="text/javascript">
                            $('.timepicker').timepicker();
                        </script>

                    </div>

                    <div class="form-group">
                        <label for="kecerahan">Kecerahan</label>
                        <input type="text" class="form-control" id="kecerahan" name="kecerahan">
                    </div>

                    <div class="form-group">
                        <label for="humidity">Humidity</label>
                        <input type="number" class="form-control" id="humidity" name="humidity">
                    </div>

                    <div class="form-group">
                        <label for="kecepatan_angin">Kecepatan Angin</label>
                        <input type="text" class="form-control" id="kecepatan_angin" name="kecepatan_angin">
                    </div>

                    <div class="form-group">
                        <label for="suhu">Suhu</label>
                        <input type="number" class="form-control" id="suhu" name="suhu">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>