<div id="contenido" class="col">
    <main id="test" class="text-center  m-3">
        <button class="pop btn btn-danger">Press the button</button>
        

        
    </main>
    

</div>
</div>

</body>
<script>
    document.querySelectorAll('.pop').forEach(e=>{
        e.addEventListener('click',el=>{
            document.getElementById('popover').classList.toggle('d-none')
        });
    })
</script>       

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


</html>