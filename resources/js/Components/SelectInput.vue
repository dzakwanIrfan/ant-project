<script setup>
  defineProps({
    modelValue: {
      type: [String, Number],
      default: ''
    },
    options: {
      type: Array,
      required: true,
    },
    placeholder: {
      type: String,
      default: 'Pilih opsi'
    },
    disabled: {
      type: Boolean,
      default: false
    }
  })
  
  defineEmits(['update:modelValue'])
</script>

<template>
    <div class="relative">
      <select
        :value="modelValue"
        @input="$emit('update:modelValue', $event.target.value)"
        class="w-full rounded-md border-gray-900 px-3 py-2 text-sm shadow-sm
               focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500
               disabled:cursor-not-allowed disabled:bg-gray-50"
        :disabled="disabled"
      >
        <option v-if="placeholder" value="" disabled selected>
          {{ placeholder }}
        </option>
        <option
          v-for="option in options"
          :key="option.value"
          :value="option.value"
          :disabled="option.disabled"
          class="py-2"
        >
          {{ option.label }}
        </option>
      </select>
      
      <!-- Dropdown arrow icon -->
      <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2">
        <svg
          class="h-4 w-4 text-gray-400"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 20 20"
          fill="currentColor"
        >
          <path
            fill-rule="evenodd"
            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
            clip-rule="evenodd"
          />
        </svg>
      </div>
    </div>
</template>