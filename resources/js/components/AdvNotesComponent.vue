<template>
    <div>
        <top-menu></top-menu>
        <div class="row mb-5">
            <div class="col-md-6">
                <new-note v-on:ListUpdate="updateNotelList($event)"></new-note>
            </div>
            <div class="col-md-6">
                <p>right column</p>
            </div>
        </div>
        <div class="row  mb-5">
            <div class="col-md-6">
                <note-list v-on:openNote="openNote($event)" v-bind:notes="notes"></note-list>                    
            </div>
            <div class="col-md-6">
                <note-preview v-bind:note="note"></note-preview>
            </div>
        </div>
    </div>
</template>
<script>


export default {    
    data() {
        return {
            notes: [],
            note: '',
            language: 'clike'
        }
    },
    mounted() {
        axios.get('/api/notes').then(
            response => this.notes = response.data
        );
    }, 
    methods: {
        openNote(note) {
            this.note = note;
        },
        updateNotelList(note) {
            this.notes.unshift(note);
        }
    }
}
</script>

