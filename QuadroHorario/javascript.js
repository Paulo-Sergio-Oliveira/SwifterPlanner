const tableBody = document.querySelector('.habitos-table tbody'),
tr = document.getElementById('insertH');
function removeHabits(element) {
    document.getElementById('+').removeAttribute('hidden');
    element.setAttribute('hidden', '')
    tr.setAttribute('hidden', '');
}
function addHabits(element) {
    document.getElementById('-').removeAttribute('hidden');
    element.setAttribute('hidden', '')
    tr.removeAttribute('hidden');
}

function insertHabit() {
    const trs = tableBody.querySelectorAll('tr');
    let condition = false;
    trs.forEach(element => {
        let tds = element.querySelectorAll('td');
        tds.forEach(element2 => {
            if (element2.textContent == document.getElementById('time').value) {
                condition = true;
            }
        })
        
    })
    if (document.getElementById('time').value == '') {
        alert('Adicione um horário pelo menos');
    } else if (condition) {
        alert('Este horário já foi registrado, coloque outro')
    } else {
        const data = {
            time: document.getElementById('time').value,
            monday: document.getElementById('monday').value,
            tuesday: document.getElementById('tuesday').value,
            wednesday: document.getElementById('wednesday').value,
            thursday: document.getElementById('thursday').value,
            friday: document.getElementById('friday').value,
            saturday: document.getElementById('saturday').value,
            sunday: document.getElementById('sunday').value,
        }
        $.ajax({
            url: 'insertQuadroH.php',
            method: 'POST',
            data: data,
            dataType: 'json'
        }).done(function(response) {
            if (response != '') {
                alert(response);
            } else {
                document.getElementById('+').removeAttribute('hidden');
                document.getElementById('-').setAttribute('hidden', '')
                tr.setAttribute('hidden', '');
                onloading();
                document.getElementById('time').value = '';
                document.getElementById('monday').value = '';
                document.getElementById('tuesday').value = '';
                document.getElementById('wednesday').value = '';
                document.getElementById('thursday').value = '';
                document.getElementById('friday').value = '';
                document.getElementById('saturday').value = '';
                document.getElementById('sunday').value = '';
            }
        });
    }
}

function onloading() {
    $.ajax({
        url: 'selectQuadroH.php',
        method: 'GET',
        dataType: 'json'
    }).done(function(response) {
        tableBody.innerHTML = response;
    });
}

function deleteH(id) {
    $.ajax({
        url: 'deleteQuadroH.php?id='+id,
        method: 'GET',
        dataType: 'json'
    }).done(function(response) {
        if (response == 'sucess') {
            onloading();
        }
    }); 
}

function updateH(id, element) {
    const tr =  document.getElementById(id);
    const tds = tr.querySelectorAll('td');
    let texts = [];
    let ids = ['timeUp', 'mondayUp', 'tuesdayUp', 'wednesdayUp', 'thursdayUp', 'fridayUp', 'saturdayUp', 'sundayUp']
    for(let i = 0; i < 8; ++i) {
        texts.push(tds[i].textContent);
    }
    tr.innerHTML = '';
    for (let i = 0; i < 8; i++) {
        let input = document.createElement('input'),
        td = document.createElement('td');
        input.type = i === 0 ? 'time' : 'text';
        input.value = texts[i];
        input.id = ids[i];
        td.appendChild(input);
        tr.appendChild(td);
    }
    tr.appendChild(tds[8]);
    let btnUpdate = document.createElement('button');
    btnUpdate.type = 'button';
    btnUpdate.textContent = 'Salvar';
    btnUpdate.classList.add('botao-salvar');
    btnUpdate.addEventListener('click', function(e) {
        const data = new FormData();
        for (let i = 0; i < 8; i++) {
            const tds2 = tr.querySelectorAll('td');
            let values = tds2[i].querySelector('input').value;
            data.append(ids[i], values)
        }
        data.append('id', id);
        $.ajax({
            url: 'updateQuadroH.php',
            method: 'POST',
            data: data,
            processData: false,
            contentType: false
        }).done(function(response) {
            if (response == 'sucess') {
                onloading();
            } else if (response == 'error'){
                alert('Este horário já foi registrado, coloque outro')
            } else{
                alert('Adicione um horário pelo menos');
            }
        });
    });
    let td = document.createElement('td');
    td.appendChild(btnUpdate);
    tr.appendChild(td);
}