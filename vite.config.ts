import { defineConfig } from "vite";
import vue from "@vitejs/plugin-vue";
import symfonyPlugin from "vite-plugin-symfony";

export default defineConfig({
  plugins: [symfonyPlugin(), vue()],
  root: "./assets",
  base: "/build/",
  build: {
    manifest: true,
    emptyOutDir: true,
    assetsDir: "",
    outDir: "../public/build/",
    rollupOptions: {
      input: {
        app: "./app.ts",
      },
    },
  },
});
