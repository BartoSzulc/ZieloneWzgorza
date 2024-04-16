import sharp from 'sharp';
import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';

// Since __dirname is not available in ES module scope, we need to derive it
const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

// Adjust the paths to account for the script's location
const imagesDir = path.join(__dirname, '..', '/images');
const outputDir = path.join(__dirname, '..', '/images/converted');
console.log('imagesDir:', outputDir);
// Ensure the output directory exists
if (!fs.existsSync(outputDir)) {
  fs.mkdirSync(outputDir, { recursive: true });
}

// Read the source directory and process each image
fs.readdirSync(imagesDir).forEach(file => {
  const sourcePath = path.join(imagesDir, file);
  const outputPath = path.join(outputDir, file);

  // Check if the file is an image
  if (/\.(jpg|jpeg|png|gif|webp)$/i.test(file)) {
    sharp(sourcePath)
    //.resize({ width: 1920 }) // Optional: Resize if needed
    .toFormat('webp', { quality: 80 }) // Convert to WebP with quality adjustment
    .toFile(outputPath, (err, info) => {
      if (err) {
        console.error('Error processing image:', file, err);
      } else {
        console.log('Processed image:', file, info);
      }
    });
  }
});
