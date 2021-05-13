
var modalWrap = null;
const showModal=(

    urll
)=>{

    if(modalWrap!==null){
        modalWrap.remove()
    }

modalWrap=document.createElement('div');
modalWrap.innerHTML = `
<div class="modal" tabindex="-1">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title">Malumotni o'chirish</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <p>o'chirishni tasdiqlaysizmi ?</p>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">yo'q</button>
      <form method="get" enctype="multipart/form-data" action=${urll}>

      <button type="submit" class="btn btn-primary">Ha</button>
      </form>
    </div>
  </div>
</div>
</div>
`;

document.body.append(modalWrap);

var modal= new bootstrap.Modal(modalWrap.querySelector('.modal'));
modal.show();

}

