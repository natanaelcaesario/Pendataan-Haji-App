<?php if (session()->has('logged')) { ?>
    <footer class="page-footer font-small unique-color-dark pt-4" hidden>

        <!-- Footer Elements -->
        <div class="container">

            <!-- Call to action -->
            <ul class="list-unstyled list-inline text-center py-2">
                <li class="list-inline-item">
                    <h5 class="mb-1">Register for free</h5>
                </li>
                <li class="list-inline-item">
                    <a href="<?= base_url('user/register') ?>" class="btn btn-outline-white">Sign up!</a>
                </li>
            </ul>
            <!-- Call to action -->

        </div>
        <!-- Footer Elements -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://mdbootstrap.com/education/bootstrap/">PT. Madinah Iman Wisata Jepara</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->


    <!-- jQuery -->
    <script type="text/javascript" src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?= base_url('assets/js/popper.min.js') ?>"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?= base_url('assets/js/mdb.min.js') ?>"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript"></script>

    </body>

    </html>
<?php } ?>


<?php if (!session()->has('logged')) { ?>
    <!-- Footer -->
    <footer class="page-footer font-small unique-color-dark pt-4">

        <!-- Footer Elements -->
        <div class="container">

            <!-- Call to action -->
            <ul class="list-unstyled list-inline text-center py-2">
                <li class="list-inline-item">
                    <h5 class="mb-1">Daftar Disini! </h5>
                </li>
                <li class="list-inline-item">
                    <a href="<?= base_url('user/register') ?>" class="btn btn-outline-white">Sign up!</a>
                </li>
            </ul>
            <!-- Call to action -->

        </div>
        <!-- Footer Elements -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://mdbootstrap.com/education/bootstrap/"> PT. Madinah Iman Wisata Jepara</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->


    <!-- jQuery -->
    <script type="text/javascript" src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?= base_url('assets/js/popper.min.js') ?>"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?= base_url('assets/js/mdb.min.js') ?>"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript"></script>

    </body>

    </html>
<?php } ?>