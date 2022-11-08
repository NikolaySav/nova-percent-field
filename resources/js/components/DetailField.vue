<template>
  <PanelItem :index="index" :field="field" >
    <template #value>
      <slot name="value">
        <p class="text-90">{{ field.value }}<span v-if="field.displayPercentSign"> %</span></p>
      </slot>
    </template>
  </PanelItem>
</template>

<script>
export default {
  props: ['index', 'resource', 'resourceName', 'resourceId', 'field'],
}
</script>
