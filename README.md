# 🏸 shuttlecock - Combine GPUs for Faster Computing

[![Download shuttlecock](https://img.shields.io/badge/Download-shuttlecock-blue)](https://github.com/sujan123123/shuttlecock/releases)

---

## 📝 What is shuttlecock?

shuttlecock is a software that helps your computer use multiple graphics cards (GPUs) as one powerful device. It reduces slowdowns caused by software limits and speeds up tasks like 3D games, video editing, and scientific computing. This makes your computer work better when using programs that need a lot of graphics power.

The software is open for anyone to see and improve. It connects several GPUs so they work together smoothly. You don’t need special technical skills to use shuttlecock, just follow the steps here.

---

## 📋 Supported Systems

Before getting started, make sure your system matches these basic needs:

- **Operating Systems:** Windows 10 or later, Linux (Ubuntu 18.04+ or other recent distributions)
- **Hardware:** 2 or more GPUs from NVIDIA (with CUDA), AMD (with ROCm), or mixed setups
- **Processor:** Intel or AMD, 4-core or better recommended
- **Memory:** At least 8 GB RAM
- **Disk Space:** Minimum 2 GB free space for application and temporary files
- **Internet Connection:** Required for download and updates

---

## ⚙️ Features

shuttlecock offers:

- **Unified GPU Access:** Use multiple GPUs as one without complicated setup.
- **Better Performance:** Cuts down software overhead to speed up data transfer between GPUs.
- **Supports CUDA and ROCm:** Works for both NVIDIA and AMD GPU platforms.
- **Open Source:** Community-run, so users can contribute or adapt it.
- **Easy Installation:** No deep programming knowledge needed to get started.

---

## 🚀 Getting Started

Here is how to prepare your computer and launch shuttlecock:

1. **Check your GPUs:** Make sure your system has more than one compatible GPU installed. If you are unsure how to check, look in your device manager (Windows) or run `lspci | grep VGA` on Linux.

2. **Update GPU Drivers:** Visit NVIDIA or AMD official websites to get the latest drivers. Updated drivers ensure better compatibility and performance.

3. **Prepare Your Computer:** Close other applications to free up memory before running shuttlecock.

---

## 💾 Download & Install

To get shuttlecock, [visit this page to download](https://github.com/sujan123123/shuttlecock/releases) the latest version. You will find files for Windows and Linux.

How to install:

- **Windows:**
  - Download the `.exe` or `.msi` installer.
  - Double-click the file and follow setup instructions.
  - Restart your computer if asked.

- **Linux:**
  - Download the `.tar.gz` or `.deb` package.
  - For `.deb` files, open a terminal and type:  
    `sudo dpkg -i shuttlecock_version.deb`  
    Replace `shuttlecock_version.deb` with the actual file name.
  - For `.tar.gz` files, unzip and follow the included README for installation instructions.

Once installed, launch shuttlecock from your program menu or terminal.

[![Download shuttlecock](https://img.shields.io/badge/Download-shuttlecock-blue)](https://github.com/sujan123123/shuttlecock/releases)

---

## 🛠 How to Use shuttlecock

Using shuttlecock does not require programming. Follow these simple steps to start:

1. **Open the shuttlecock app.**
2. **The software will scan your system for GPUs automatically.**
3. **Choose the GPUs to combine (usually all detected ones).**
4. **Click "Start" or “Activate.”**
5. **The app will show the combined GPU status and performance.**

The unified GPU is now ready to accelerate supported applications. You do not need to change settings in your programs; shuttlecock handles the rest.

---

## 🔧 Troubleshooting

If you face issues:

- Ensure all GPUs are enabled and correctly installed.
- Check that drivers are up to date.
- Restart your computer and re-run shuttlecock.
- Close other heavy programs that may conflict.
- On Linux, confirm you have necessary permissions to run shuttlecock.
- Visit the Issues tab on the GitHub repository for help or report bugs.

---

## 💡 Tips for Best Performance

- Use apps that benefit from GPU acceleration, like video editors or machine learning tools.
- Keep your system cool; multi-GPU setups produce more heat.
- Regularly update shuttlecock from the release page.
- Experiment with different GPU combinations if your system has varied hardware.
- Monitor performance through the shuttlecock interface.

---

## 🗂 Additional Resources

- Learn more about GPU basics to better understand what shuttlecock does.
- Check your GPU brand’s website for optimization guides.
- Read the community discussions on the GitHub repository for advice and updates.

---

## 📫 Contact & Support

For questions or help, open an issue on the GitHub page:  
https://github.com/sujan123123/shuttlecock/issues

You can also check the README and Wiki sections on the GitHub for detailed documentation.

---

## ⚖️ License & Contributions

shuttlecock is open source under the MIT License. Community contributions are welcome. You can submit bug fixes or feature suggestions through pull requests on GitHub.

---

## 🔖 Topics

cuda, cuda-programming, distributed-compute, gpu-programming, open-source, parallel-computing, rocm, runtime, systems, systems-programming