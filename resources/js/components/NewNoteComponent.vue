<template>
    <form @submit.prevent="addNewNote" id="addNewNoteForm">
        <div class="form-group">
            <input type="email" class="form-control" id="noteTitleInput" aria-describedby="emailHelp" placeholder="Enter note title">
        </div>
        <div class="form-group">
            <textarea class="form-control" id="noteDescriptionInput" placeholder="Enter note description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary float-right">Submit</button>
    </form>
</template>
<script>
export default {
    methods: {
        addNewNoteForm() {
        }
    }    
}
</script>
