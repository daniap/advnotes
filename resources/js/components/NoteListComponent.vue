<template>
    <ul class="list-group">
        <a @click.prevent="openNote(note)" v-for="note in notes" href="#" :key="note.id" class="list-group-item list-group-item-action">{{note.title}} 
            <span class="icons">
                <edit-icon />
                <delete-icon v-on:removeFromList="updateList($event)" v-bind:note="note" class="float-right"/>
            </span>
        </a>    
    </ul>
</template>

<script>
export default {
    props: ['notes'],
    data() {
        return {
            active: ''
        }
    },
    computed : {
        removeFromList: function (note) {
            return this.notes.filter(
                (item) => {
                    return item.id !== note.id;
                }
            )
        }
    },
    methods: {
        openNote (note) {
            this.$emit('openNote', note );
        },
        updateList(note) {
            () => {
            this.notes = this.removeFromList(note);
            }
        }
    }

}
</script>
<style>

</style>
