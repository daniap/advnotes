<template>
    <form @submit.prevent="addNewNote" id="addNewNoteForm">
        <div class="form-group">
            <input v-model="note.title" type="text" class="form-control" name="noteTitleInput" aria-describedby="textHelp" placeholder="Enter note title">
        </div>
        <div class="form-group">
            <textarea v-model="note.description" class="form-control" name="noteDescriptionInput" placeholder="Enter note description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary float-right">Submit</button>
    </form>
</template>
<script>
export default {
    name: "NewNote",
    data(){
        return {
            note : {
                title: '',
                description: ''
            },
            blankNote: {
                title: '',
                description: ''
            }
        }
    },
    methods: {
        addNewNote: function() {
            const self = this;
            axios.post('/api/notes', this.note).then(
                (response) => {
                    self.$emit("ListUpdate", response.data);
                    this.note =this.blankNote;
                }
            ).catch(
                (error) => {
                    console.log("we have a problem", error);
                }
            )       
        }
    }    
}
</script>
