<template>
<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
        <a class="navbar-brand" href="#">ADV NOTES</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
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
            <note-content v-bind:active-note="note"></note-content>
        </div>
    </div>
</div>
</template>
<script>
export default {    
    data() {
        return {
            notes: [],
            note: ''
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

