<script type="text/x-jQuery-tmpl" id="destinations-tmpl">
    <div class="card mb-2">
        <div class="card-body">
            <h5 class="card-title" style="color:#BC020C">${name}</h5>
        </div>
        <ul class="list-group list-group-flush">
            {{each destinations}}
                <li class="list-group-item ml-5 justify-content-between" style="color:#111;">${$value.name} <small>${$value.description}</small></li>
            {{/each}}
        </ul>
    </div>
</script>