<template>
    <span>{{ field.value }}<span v-if="field.displayPercentSign">&nbsp;%</span></span>
</template>

<script>
export default {
    props: ['resourceName', 'field'],
}
</script>
