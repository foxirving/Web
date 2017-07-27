package java;
import java.io.File;

public class FileReader {

	public File LocalFile;

	// set file location
	public void loadFile(String FileName) {
		LocalFile = new File(FileName);
	}

	// return file size
	public long getFileSize() {
		return LocalFile.length();
	}

	// check if file exists
	public boolean FileExists() {
		return LocalFile.exists();
	}

	// return file path
	public String getFilePath() {
		return LocalFile.getAbsolutePath();
	}

}
