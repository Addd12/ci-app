<?php $this->load->view('header');?>
<div class="container">
    <h3 class="title is-3">CodeIgniter Database Pagination</h3>
    <div class="column">
        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Birthday</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($authors as $author): ?>
                    <tr>
                        <td><?= $author->id ?></td>
                        <td><?= $author->first_name ?></td>
                        <td><?= $author->last_name ?></td>
                        <td><?= $author->email ?></td>
                        <td><?= $author->birthdate ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <p><?php echo $links; ?></p>
    </div>
</div>
<?php $this->load->view('footer');?>