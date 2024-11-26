<script setup lang="ts">

const subOperations = ref<string[]>(['']);
const addSubOperation = () => {
  subOperations.value.push('');
};
const removeSubOperation = (index: number) => {
  if (subOperations.value.length > 1) {
    subOperations.value.splice(index, 1);
  }
};

</script>

<template>

  <UForm  class="w-full space-y-4">

    <div class="mb-5">
      <h3 class="text-2xl font-bold">Add new operation</h3>
    </div>

    <UFormGroup label="Operation Name" name="operation_name" size="lg">
      <UInput/>
    </UFormGroup>

    <div class="space-y-2">
      <span class="block font-medium text-gray-700 dark:text-gray-200 text-sm">Sub-Operations</span>
      <div v-for="(subOperation, index) in subOperations" :key="index" class="flex items-center space-x-2 mt-1">
        <UFormGroup v-model="subOperations[index]"
                    class="flex-1" size="lg">
          <UInput/>
        </UFormGroup>
        <UButton
            size="sm"
            icon="i-heroicons-trash-16-solid"
            variant="ghost"
            @click="removeSubOperation(index)"
            :disabled="subOperations.length === 1"
        />
      </div>
      <UButton
          variant="ghost"
          label="Add Sub-Operation"
          size="xs"
          icon="i-heroicons-plus-16-solid"
          @click="addSubOperation"

      />
    </div>

    <UButton block label="Create operation" type="submit"/>
  </UForm>

</template>

<style scoped>

</style>