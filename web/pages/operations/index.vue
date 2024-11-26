<script setup lang="ts">
  const isOpen = ref(false)
  const subOperations = ref<string[]>(['']);
  const addSubOperation = () => {
    subOperations.value.push('');
  };
  const removeSubOperation = (index: number) => {
      subOperations.value.splice(index, 1);
  };

</script>

<template>
      <div class="max-w-4xl mx-auto xl:max-w-6xl flex items-start justify-between">
        <div>
          <UButton
              to="/operations/create"
              icon="i-heroicons-plus-16-solid"
              size="sm"
              color="primary"
              variant="solid"
              label="Add new operation"
          />
        </div>
        <div>
          <UButton
              icon="i-heroicons-magnifying-glass-16-solid"
              size="sm"
              color="primary"
              variant="solid"
              class="mx-1"
              @click="isOpen = true"
          />
          <UButton
              icon="i-heroicons-trash-16-solid"
              size="sm"
              color="primary"
              variant="solid"
              class="mx-1"
          />
        </div>
      </div>

      <div class="grid max-w-4xl lg:max-w-6xl grid-cols-1 mx-auto mt-4 text-center gap-y-4 sm:gap-x-8 sm:grid-cols-2 lg:grid-cols-3 sm:mt-6 lg:mt-8 sm:text-left">
        <OperationCard/>
        <OperationCard/>
        <OperationCard/>
      </div>

  <div>
    <UModal v-model="isOpen">
      <UCard>
        <template #header>
          <div class="flex items-center justify-between">
            <h3 class="text-2xl font-bold">
              Search Operations
            </h3>
            <UButton color="gray" variant="ghost" icon="i-heroicons-x-mark-20-solid" class="-my-1" @click="isOpen = false" />
          </div>
        </template>

        <div>
          <UForm>
            <UFormGroup label="Operation Name" name="operation_name" size="sm">
              <UInput/>
            </UFormGroup>

          <div class="space-y-2">
            <span class="block font-medium text-gray-700 dark:text-gray-200 text-sm">Sub-Operations</span>
            <div v-for="(subOperation, index) in subOperations" :key="index" class="flex items-center space-x-2 mt-1">
              <UFormGroup v-model="subOperations[index]"
                          class="flex-1" size="sm">
                <UInput/>
              </UFormGroup>
              <UButton
                  size="sm"
                  icon="i-heroicons-trash-16-solid"
                  variant="ghost"
                  @click="removeSubOperation(index)"
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

          <UButton block label="Search operation" type="submit"/>
          </UForm>
        </div>
      </UCard>
    </UModal>
  </div>
</template>

<style scoped>

</style>