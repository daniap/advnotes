<template>
    <ul class="list-group">
        <a @click.prevent="openNote(note)" v-for="note in notes" href="#" :key="note.id" class="list-group-item list-group-item-action">{{note.title}}</a>
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
    methods: {
        openNote (note) {
            this.$emit('openNote', note );
        }
    }

}
</script>