function editEmployee(id) {
    fetch('edit.php?id=' + encodeURIComponent(id))
        .then(response => {
            if (!response.ok) throw new Error('Employee not found');
            return response.json();
        })
        .then(employee => {
            document.getElementById('id').value = employee.id;
            document.getElementById('name').value = employee.name;
            document.getElementById('email').value = employee.email;
        })
        .catch(console.error);
}
