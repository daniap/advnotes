<template>
<div>
    <div class="card" v-if="note.length !== 0">
        <div class="card-body">
            <h5 class="card-title">{{note.title}}</h5>
            <h6 class="card-subtitle mb-2 text-muted"><badge v-bind:language="note.language" /></h6>            
<pre :class="getNoteClass"><code :class='getNoteClass' v-html='styledNote'></code></pre>
        </div>
    </div>
</div>
    
</template>
<script>
import Prism from 'prismjs';
import Languages from 'prism-languages';

import 'prismjs/themes/prism.css' 

export default {
    props: ['note'],
    data: function(){
        return {
            class: 'language-'
        }
    },
    computed: {
        styledNote: function () {
            return Prism.highlight(this.note.description, Languages[this.note.language]);
        },
        getNoteClass: function() {
            return this.class + this.note.language;
        }
    }
}
</script> 
