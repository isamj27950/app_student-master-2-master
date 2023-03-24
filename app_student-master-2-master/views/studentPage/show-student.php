<div class="card m-auto mt-6 text-center p-8 flex-shrink-0 w-full max-w-sm bg-fuchsia-100 shadow-xl">
<figure><img src="<?=$student['url_img'] ?>"alt= "movie" /></figure>
<div class="card-body">
    <p class="text-5xl font-bold "><?= $student['fName'] ,$student['lName']?></p>
    <p class="">Email: <?= $student['email']?></p>
    <p class="">Age: <?= $student['age']?> ans</p> 
    <p class="">Formation: <?= $student['formation']?><p>
    <p class="">Date de naissance: <?= $date = date("d/m/Y",strtotime($student['date_of_birth']))?><p>   
    <div class="mt-10 text-center">
    <a href="update.php?id=<?=$student['id']?>"class="btn btn-info ">Modifier</a>
    <a  href="delete.php?id=<?=$student['id']?>"class="btn btn-active btn-error">Supprimer</a>
    </div>
</div>
</div>

